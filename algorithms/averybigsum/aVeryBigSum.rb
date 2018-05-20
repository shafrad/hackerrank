#!/bin/ruby

def aVeryBigSum(n, ar)
    # Complete this function
    return ar.inject(0, :+)
end

n = gets.strip.to_i
ar = gets.strip
ar = ar.split(' ').map(&:to_i)
result = aVeryBigSum(n, ar)
puts result;