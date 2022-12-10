#! /bin/bash
sudo docker build -t ping-pwn:latest .
sudo docker run -d -p 10121:80 ping-pwn
