#include <stdio.h>
#include <string.h>
#include <stdlib.h>

void super_generic_flag_reading_function_please_ret_to_me()
{
  puts("flag{fl4g_r34d3r_pwn3d}");
}

int main(void)
{
  char comments_and_concerns[32];

  setbuf(stdout, NULL);
  setbuf(stdin, NULL);
  setbuf(stderr, NULL);

  puts("alright, the rob inc company meeting is tomorrow and i have to come up with a new pwnable...");
  puts("how about this, we'll make a generic pwnable with an overflow and they've got to ret to some flag reading function!");
  puts("slap on some flavortext and there's no way rob will fire me now!");
  puts("this is genius!! what do you think?");

  gets(comments_and_concerns);
}
