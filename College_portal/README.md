ECHO

Fastest
Can print multiple values
No return value

PRINT

Slightly slower than echo
Prints only one value
Returns 1

DIE()
Stops script execution immediately
Can print a message before stopping

By default, PHP can pass session IDs in two ways:
Cookies
URL parameters

$\_FILES → gets uploaded file details

move_uploaded_file() → saves file permanently

header() → controls browser behavior (download, redirect, etc.)

Content-Type =>Tells browser it’s a file
Content-Disposition=> Forces download
Content-Length =>Shows file size
readfile() =>Sends file content

inline vs attachment
This part is controlled by Content-Disposition.
attachment → forces download
inline → opens in browser

readdir()

Reads one entry at a time from opened directory
