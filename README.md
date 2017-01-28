# diva-server
DIVA server interacts with a user, target device and display capture board.

## Flow chart

			+---------------------+      +---------------------+      +---------------------+
			|  diva dispcapture   |      |      diva server    |      |      diva target    |
			+---------------------+      +---------------------+      +---------------------+
			                                  index.html
            			                           |
                        			               v
 			Start capturing HDMI <------   diva_request.php    ------> Run unit test
            			                           |
			                                       v
 			Capture done         ------>    diva_wait.php      <------ Test done
            			                           |
                        			               v
                                			diva_result.php

## How to deploy diva-server
1. Install apache webserver
2. Copy diva-server files under /var/www/html/
3. Configure DIVA by referencing diva_config.php or updating /etc/hosts
