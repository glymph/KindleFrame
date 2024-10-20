# KindleFrame - using an Amazon Kindle to display images like a photo frame

Online Screensaver is a collection of scripts developed by user 'peterson' on the mobileread.com forum. I discovered that it needed tweaking slightly to function on the Kindle Touch 1, but that it works very well and consistently after changing the RTC value to 1 and correcting the paths. Further details in the forum thread link below.

To install, copy the contents of the "server" directory to a location that is accessible to the Kindle via http or https.

Jailbreak the Kindle and install KUAL and the screensaver hack, then download the "client" directory" and configure the file `config.sh` in the client/bin directory to point to your webserver, whether it's accessible on your home network or online. Copy the modified contents of "client" to the kindle's "extensions" directory via USB.

References:

* [Jailbreak instructions](https://www.mobileread.com/forums/showthread.php?t=186645)
* [KUAL](https://www.mobileread.com/forums/showthread.php?t=203326)
* [Screensavers hack](https://www.mobileread.com/forums/showthread.php?t=195474)
* [Online Screensaver](https://www.mobileread.com/forums/showthread.php?t=236104&highlight=onlinescreensaver)


To enable the OnlineScreenSaver, deactivate the Screensaver Hack, run an update of the OnlineScreenSaver (both of which can be done within Kual), turn off wifi and press the power button. Note that the device should remain plugged in to power to continue to update the image.

The device will show the "you successfully installed the screensaver hack" screen after first configuring the Kindle. To resolve this, press the power button again to come out of the screensaver, and press it once again to display the OnlineScreenSaver. If the screen remains, run the update script via Kual.

If the OnlineScreenSaver stops working, reboot the Kindle and run its update script from Kual, or just let it automatically start after a few minutes.

Example commands for converting images:

`convert Eiffel_Tower.png -strip -colorspace gray -resize "600x800>" -depth 8 -colors 16 +dither -type palette -quality 75 /var/www/html/kindlephotos/images/Eiffel_Tower.png`

Alternatively, convert a directory of files:

`for i in * ; do convert "$i" -strip -colorspace gray -resize "600x800>" -depth 8 -colors 16 +dither -type palette -quality 75 /var/www/html/kindlephotos/images/"$i" ; done`

![A photograph of a Kindle in a wooden picture frame displaying an image of the Eiffel Tower](https://github.com/glymph/KindleFrame/blob/main/images/KindleFrame-EiffelTower.png?raw=true)
