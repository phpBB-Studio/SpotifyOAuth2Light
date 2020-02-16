# phpBB Studio - Spotify OAuth2 light

## Installation

Copy the extension to phpBB/ext/phpbbstudio/spl

Go to "ACP" > "Customise" > "Extensions" and enable the "phpBB Studio - Spotify OAuth2 light" extension.

## Application settings:

https://developer.spotify.com/dashboard/applications -> (Create a client ID)

Copy and save the `Client ID` and `Client Secret` to use in the `ACP / Client communication / Authentication` page.

## OAuth2 Redirects:

Two links is what you need to use in the `Redirect URIs` for the application to work (http or https is ok)

`http://www.example.com/board/ucp.php?mode=login&login=external&oauth_service=studio_spotify`

`http://www.example.com/board/ucp.php?i=ucp_auth_link&mode=auth_link&link=1&oauth_service=studio_spotify`

replace `http://www.example.com/board` with your Board's URL ;-D

## License

[GPLv2](../license.txt)
