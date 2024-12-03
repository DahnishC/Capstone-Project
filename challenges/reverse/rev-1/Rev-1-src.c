#include <stdio.h>
#include <unistd.h>
char FLAG1[20]="flag{833450aafcf1a8";
char FLAG2[20]="02422ac2bf6c42a304}";
int main() {
    puts("Welcome to the Rev-1 challenge!");
    puts("Let me show you a secret!");
    for (int i = 0; i < 20; ++i) {
        printf(". ");
        fflush(stdout);
        usleep(500000);
    }
    puts("");
    puts("Nevermind, Never mind, go and find it yourself!");
    return 0;
}