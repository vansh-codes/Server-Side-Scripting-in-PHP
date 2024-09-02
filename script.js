document.addEventListener("DOMContentLoaded", () => {
    const fileList = document.getElementById('file-list');
    const baseURL = 'https://api.github.com/repos/vansh-codes/Server-Side-Scripting-in-PHP/contents';

    const ignoredFiles = [
        'README.md',     // Example: ignore specific file
        '.gitignore',
        'index.html',
        'script.js',
        'style.css',
        'favicon.png'
    ];

    function shouldIgnoreFile(filePath) {
        return ignoredFiles.some(ignored => filePath.includes(ignored));
    }

    async function fetchDirectoryContents(path = '') {
        const url = `${baseURL}/${path}`;
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();

        for (const item of data) {
            const fullPath = item.path;
            if (shouldIgnoreFile(fullPath)) {
                continue;  // Skip the file if it matches the ignored pattern
            }

            if (item.type === 'dir') {
                // If item is a directory, recursively fetch its contents
                await fetchDirectoryContents(fullPath);
            } else if (item.type === 'file') {
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

    // Start fetching from the root directory
    fetchDirectoryContents().catch(error => {
        console.error('Error:', error);
        fileList.innerHTML = '<p>Failed to load files. Please try again later.</p>';
    });

    /* fetch('https://api.github.com/repos/vansh-codes/Server-Side-Scripting-in-PHP/contents')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            // Remove skeletons
            fileList.innerHTML = '';
            console.log(data);

            if (Array.isArray(data)) {
                const filesToIgnore = ['README.md']; // Replace with actual file names

                data.forEach(file => {
                    const fileName = file.name;

                    if (filesToIgnore.includes(fileName)) {
                        return; // Skip this file
                    }

                    const fileURL = file.html_url;
                    const openButton = document.createElement('button');
                    openButton.textContent = fileName + ' - Open';
                    openButton.addEventListener('click', () => {
                        window.open(fileURL);
                    });
                    fileList.appendChild(openButton);
                    fileList.appendChild(document.createElement('br'));
                });
            } else {
                console.error('Error: Expected an array but received:', data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            fileList.innerHTML = '<p>Failed to load files. Please try again later.</p>';
        }); */
});
