
import requests
from bs4 import BeautifulSoup

page = requests.get("https://etherscan.io/token/0x168296bb09e24a88805cb9c33356536b980d3fc5#balances" + "/token/gene/")
soup =  BeautifulSoup(page.content, "lxml")
test = soup.find_all('iframe')

for tag in test:
    print (tag)

