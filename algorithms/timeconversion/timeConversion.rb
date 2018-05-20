#!/bin/ruby

def timeConversion(s)
    # Complete this function
    require 'date'
    DateTime.parse(s).strftime("%H:%M:%S")
end

s = gets.strip
result = timeConversion(s)
puts result