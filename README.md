# FT857-Web-Remote-CAT-Raspberry-Pi
 The FT857 is managed through a web app interfaced to an Apache server running on a Raspberry Pi.
 From the version FT857 Web Browser CAT Raspberry Pi:
 - The web app was largely optimized (a single GET request groups all the FT857 parameter requests).
 - The version 4.1 HAMLIB library is now used with the possibility to get the FT857 VFO used (A or B).
 - The server php code was simplified.
The HAMLIB library 4.1 does not allow to get DSP or CW parameters available from reads from the EEPROM memory. The corresponding source code developped on the ESP32 solution is in comments.
Thank you to OK1ZIA and OK1HRA to give me the hints how to use the HAMLIB library in a php code. http://ok1zia.nagano.cz/wiki/index.php?title=WebRig&mobileaction=toggle_view_mobile#How_to_install

73 Philippe F6CZV https://f6czv.fr
