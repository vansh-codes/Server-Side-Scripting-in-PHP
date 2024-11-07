## FILTERS

- It is used to validate and sanitize external input
- specially useful for unknown data like user input, data from html form, cookies, sql statement etc..
- Validation is used to check if the data meets certain requirements
  - ex: passing in FILTER_V will determine if the data passed in valid or not but will not change the data itself
- Sanitization may alter data by removing extra characters that are inappropriate for an email address (FILTER_SANITIZE_EMAIL)

### **PHP filter extension has many functions ...**

- filter_var() function both validate and sanitize the data


### Example functions
- FILTER_VALIDATE_EMAIL & FILTER_SANITIZE_EMAIL
- FILTER_VALIDATE_URL & FILTER_SANITIZE_URL
- FILTER_VALIDATE_IP & FILTER_SANITIZE_IP