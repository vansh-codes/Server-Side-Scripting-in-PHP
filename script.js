document.addEventListener("DOMContentLoaded", () => {
    const fileList = document.getElementById('file-list');
    const baseURL = 'https://api.github.com/repos/vansh-codes/Server-Side-Scripting-in-PHP/contents';

    const ignoredFiles = [
        'README.md',     
        'index.html',
        'script.js',
        'style.css',
        'favicon.png'
    ];

    function shouldIgnoreFile(filePath) {
        return ignoredFiles.some(ignored => filePath.includes(ignored));
    }

    function addSkeletons() {
        for (let i = 0; i < 3; i++) {
            const skeleton = document.createElement('div');
            skeleton.className = 'skeleton';
            fileList.appendChild(skeleton);
        }
    }

    function removeSkeletons() {
        const skeletons = document.querySelectorAll('.skeleton');
        skeletons.forEach(skeleton => skeleton.remove());
    }

    async function fetchDirectoryContents(path = '') {
        const url = `${baseURL}/${path}`;
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        removeSkeletons();

        for (const item of data) {
            const fullPath = item.path;
            if (shouldIgnoreFile(fullPath)) {
                continue;  // Skip the file if it matches files mentioned in ignoredFiles array
            }

            if (item.type === 'dir') {
                // If item is a directory, recursively fetch its contents
                await fetchDirectoryContents(fullPath);
            } else if (item.type === 'file') {
                const skeleton = document.querySelector('.skeleton');
                if (skeleton) {
                    skeleton.remove();
                }
                // If item is a file, add it to the file list with the full path as its name
                const openButton = document.createElement('button');
                openButton.textContent = fullPath + ' - Open';
                openButton.addEventListener('click', () => {
                    window.open(item.html_url);
                });
                fileList.appendChild(openButton);
                fileList.appendChild(document.createElement('br'));
            }
        }
    }

    addSkeletons();

    // Start fetching from the root directory
    fetchDirectoryContents().catch(error => {
        console.error('Error:', error);
        fileList.innerHTML = '<p>Failed to load files. Please try again later.</p>';
    });

});
