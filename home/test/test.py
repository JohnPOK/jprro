#!C:/Python/Python39/python.exe

# import netmiko
# from netmiko import ConnectHandler

import os.path
import cgi

data = cgi.FieldStorage()

host = data['field'].value

print('Content-Type: text/html')
print()
print('<li>Result is %s</li>' % host)
print('<li>')
print(__import__('pathlib').Path(__file__).parent)
print('</li>')

# Cisco_Devices = {}

# Cisco_Devices.update({
#     'device_type': 'cisco_ios_telnet',
#     'ip': host,
#     'port': 23,
#     'verbose': False,
#     'username': 'fsview',
#     'password': '#0advsdtqm3dg#',
#     'session_log': 'session.log',
#     'global_delay_factor': 20,
# })
