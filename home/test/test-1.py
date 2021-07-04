#!C:/Python/Python39/python.exe
# This Python script logs into a cisco device and gets details as specified in the command variable.

# Written by: JP O'Kelly

# import json

from netmiko import ConnectHandler


# Command that will be executed.
command = ['show inventory', 'show snmp location', 'show version']

rowCount = 1

# Press the green button in the gutter to run the script.
if __name__ == '__main__':
    #Read from a list of hostnames to connect to
    devices = open('cisco.txt', 'r')                          # Text file in same folder with cisco device ip address list

    Cisco_Devices = {}

    #Loop to process devices in cisco.txt file
    for host in devices:
        try:
            Cisco_Devices.update({
                'device_type': 'cisco_ios_telnet',
                'ip': host,
                "port": 23,
                "verbose": False,
                "username": "fsview",                           # This is your tacacs username.
                "password": "#0advsdtqm3dg#",                   # This is your tacacs password.
                "session_log": "session.log",
                "global_delay_factor": 20,
            })

            with ConnectHandler(**Cisco_Devices) as net_connect:
                host_name = net_connect.find_prompt().strip(">")
                print(' -------------- Busy processing cisco router \ switch: [' + str(rowCount) + '] --- '+ host_name + '--------------')
                rowCount += 1
                net_connect.set_base_prompt(pri_prompt_terminator='>', alt_prompt_terminator='>')

                with open('inventory\\' + host_name + '.txt', 'w') as outfile:                  # Results directory for the found devices and error log
                    output = net_connect.send_command(command[1],expect_string=">")
                    print(output, file=outfile)
                    print(" ", file=outfile)
                    output = net_connect.send_command(command[0],expect_string=">")
                    print(output, file=outfile)
                    print(' -------------- Successfully processed: ' + host_name + ' --------------')

            net_connect.disconnect()
        except Exception as e:
            with open('inventory\\cisco_errors.txt', 'a') as errfile:
                output_error = "Error: " + str(e) + ": " + host
                print(output_error, file=errfile)
                #print("Error: " + str(e))

# See PyCharm help at https://www.jetbrains.com/help/pycharm/
