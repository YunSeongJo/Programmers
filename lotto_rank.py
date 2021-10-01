def solution(lottos, win_nums):
    answer = [0,0]
    result = [6,6,5,4,3,2,1]
    count1 = 0;
    cnt = lottos.count(0)
    
    for i in lottos:
        if i in win_nums:
            count1 += 1
            
    answer[0],answer[1] = result[count1+cnt], result[count1]
        
    
    return answer