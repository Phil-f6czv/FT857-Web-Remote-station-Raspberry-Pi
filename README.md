# FT857-Web-Remote-CAT-Raspberry-Pi
 The FT857 is managed through a web app interfaced to an Apache server running on a Raspberry Pi.
 From the version FT857 Web Browser CAT Raspberry Pi:
 - The web app was largely optimized (a single GET request groups all the FT857 parameter requests).
 - The version 4.1 HAMLIB library is now used with the possibility to get the FT857 VFO.
 - The server php code was simplified.
The HAMLIB library 4.1 does not allow to get DSP or CW parameters available from reads from the EEPROM memory. The corresponding source code developped on the ESP32 solution is in comments.
