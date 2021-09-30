def solution(answers):
    answer = []
    a1 = [1,2,3,4,5]
    a2 = [2,1,2,3,2,4,2,5]
    a3 = [3,3,1,1,2,2,4,4,5,5]
    count = [0,0,0]
    
    for i in range(len(answers)):
        if answers[i] == a1[i%5]:
            count[0] += 1
        if answers[i] == a2[i%8]:
            count[1] += 1
        if answers[i] == a3[i%10]:
            count[2] += 1
            
    max_count = max(count)
    
    for i in range(3):
        if max_count == count[i]:
            answer.append(i + 1)

    return answer