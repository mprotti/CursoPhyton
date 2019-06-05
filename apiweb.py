import json
import requests


url = "https://www.google.com"
content = requests.get(url)
data = content.text


with open('data.html', 'w') as file:
    file.write(data)


