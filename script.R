args = commandArgs(TRUE)

# ���o�ϥΪ̿�J�� N ��
n = args[1]

# ���͸��
x = rnorm(n, 0, 1)

# ø�s�����
png(filename="output/hist.png", width = 500, height = 300)
hist(x, col = "orange")
dev.off()