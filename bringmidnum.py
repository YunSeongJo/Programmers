def solution(s):
    
    middle_string = int(len(s)/2)
    if len(s) % 2 != 0:
        return s[middle_string]
    else:
        return s[middle_string-1:middle_string+1]