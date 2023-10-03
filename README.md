### Phone Number Validator For Tanzania Networks Operator

This repository contains a simple PHP-based web application for validating phone numbers and determining their network operators. The application is designed to check the validity of a phone number, considering various conditions.

#### Features
- Validates phone numbers with 10 digits.
- Identifies network operators for valid numbers.
- Handles phone numbers with country codes (e.g., +255 or 255) by removing the code and returning a 9-digit number.
- Ensures that the input contains only digits.

#### Technologies Used
- PHP for server-side processing.
- HTML for the user interface.
- Bootstrap for styling.

#### Usage
1. Clone the repository to your local machine.
2. Set up a web server with PHP support (e.g., Apache).
3. Place the repository files in the web server's document root directory.
4. Access the application through a web browser.

#### How It Works
1. Users input their phone numbers in the provided form.
2. The PHP function `validate()` processes the input:
   - Removes non-digit characters.
   - Checks for the presence of a country code (e.g., 255 or +255) and converts it to a 9-digit number.
   - Determines the network operator based on predefined prefixes.
   - Returns the result as an alert message.

#### Network Operators Supported
- Vodacom
- Airtel
- Tigo
- Halotel
- TTCL
- Zantel
- Undefined (for unrecognized prefixes)

#### Example Usage
1. User enters a 10-digit phone number: 0761234567
   - Result: "Your phone number 0761234567 is Vodacom"

2. User enters a phone number with a country code: +255712345678
   - Result: "Your phone number 0712345678 is Tigo"

3. User enters an invalid phone number: ABCDEFG123
   - Result: "Your phone number is invalid!"

#### License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

#### Author
Crescent Geniius [ <a href="https://github.com/CodeWithCrescent">CodeWithCrescent</a> ]

#### Acknowledgments
Thanks to Vastlabs Technologies [ <a href="https://www.vastlabs.co.tz">link</a> ] for their contest which influenced me to develop this project.

Feel free to contribute to and enhance this phone number validation application as needed.
