import csv
print('Question 01')
file = open('user.csv')
type(file)
reader = csv.reader(file)

rows = []
for row in reader:
    rows.append(row)

last = rows.pop(0)

rows.sort(key=lambda x: x[3])

rows.insert(0,last)

with open('output.csv', 'w', newline='') as file:
    writer = csv.writer(file)
    writer.writerows(rows)
