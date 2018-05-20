#!/bin/python3

import sys

def solve(a0, a1, a2, b0, b1, b2):
    # Complete this function
    resultA = 0
    resultB = 0
    arrA = [a0,a1,a2]
    arrB = [b0,b1,b2]
    
    for i in range(0,3):
        if (arrA[i] > arrB[i] & arrA[i] - arrB[i] != 0):
            resultA += 1
        elif (arrB[i] > arrA[i] & arrB[i] - arrA[i] != 0):
            resultB += 1
     
    array = [resultA, resultB]
    return array

a0, a1, a2 = input().strip().split(' ')
a0, a1, a2 = [int(a0), int(a1), int(a2)]
b0, b1, b2 = input().strip().split(' ')
b0, b1, b2 = [int(b0), int(b1), int(b2)]
result = solve(a0, a1, a2, b0, b1, b2)
print (" ".join(map(str, result)))