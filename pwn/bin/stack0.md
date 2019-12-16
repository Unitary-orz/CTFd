[toc]

## stack0

> 改编自[exploit-exercises.com](https://exploit-exercises.com/protostar/stack0/)

```c
#include <stdlib.h>
#include <unistd.h>
#include <stdio.h>

int main(int argc, char **argv)
{
  volatile int modified;
  char buffer[64];

  modified = 0;
  gets(buffer);

  if(modified != 0) {
      system("/bin/sh");
  } else {
      printf("Try again?\n");
  }
}
```

```
CANARY    : disabled
FORTIFY   : disabled
NX        : disabled
PIE       : disabled
RELRO     : disabled
```

```
gcc -m32 -fno-stack-protector -z execstack -z norelro -o stack0 stack0.c
```