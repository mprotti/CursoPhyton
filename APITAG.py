

import requests
from bs4 import BeautifulSoup

page = requests.get("https://etherscan.io/token/0x168296bb09e24a88805cb9c33356536b980d3fc5#balances" + "/token/generic-tokenholders2?a=0x168296bb09e24a88805cb9c33356536b980d3fc5&amp;s=100000000000000000", timeout=10)
soup =  BeautifulSoup(page.content, "lxml")
test = soup.find_all('iframe')

for tag in test:
    print (tag)