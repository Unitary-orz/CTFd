#!/usr/bin/env pyhton3
# -*- coding:utf-8 -*-

import string
import random


def main():
    lower_num = string.ascii_lowercase + string.digits
    value = ''.join([random.choice(lower_num) for i in range(31)])
    flag = 'flag{%s}' % (value)
    print(flag)


if __name__ == '__main__':
    main()
