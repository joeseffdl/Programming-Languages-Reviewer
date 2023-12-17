import base64

str = "Hello World"
str = base64.b64encode(str.encode('utf-8'))
print("Encoded String: ", str)
str = base64.b64decode(str).decode('utf-8')
print("Decoded String: ", str)