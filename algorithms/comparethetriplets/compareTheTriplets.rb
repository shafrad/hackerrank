#!/bin/ruby

def solve(a0, a1, a2, b0, b1, b2)
    # Complete this function
    resultA = 0
    resultB = 0
    arrA = [a0,a1,a2]
    arrB = [b0,b1,b2]
    
    for i in 0..2
        if arrA[i] > arrB[i] and arrA[i] - arrB[i] != 0
            resultA += 1
        elsif arrB[i] > arrA[i] and arrB[i] - arrA[i] != 0
            resultB += 1
        end
    end
     
    array = [resultA, resultB]
    return array
end

a0, a1, a2 = gets.strip.split(' ')
a0 = a0.to_i
a1 = a1.to_i
a2 = a2.to_i
b0, b1, b2 = gets.strip.split(' ')
b0 = b0.to_i
b1 = b1.to_i
b2 = b2.to_i
result = solve(a0, a1, a2, b0, b1, b2)
print result.join(" ")