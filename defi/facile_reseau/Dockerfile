# Sử dụng Ubuntu làm base image
FROM ubuntu:20.04

# Cài đặt các gói cần thiết, bao gồm vsftpd
RUN apt-get update && apt-get install -y \
    vsftpd \
    curl \
    nano \
    && rm -rf /var/lib/apt/lists/*

# Tạo user 'user1' và thiết lập thư mục
RUN useradd -m -d /home/user1 -s /bin/bash user1 \
    && mkdir -p /home/user1

# Tạo user 'user2' cho FTP và thiết lập thư mục với file flag.txt
RUN useradd -m -d /home/user2 -s /bin/bash user2 \
    && mkdir -p /home/user2/ftp \
    && echo "This is the flag!  -->  CTF_2_5_{!_M@st3r_0f_Netw0rk1ng_!}" > /home/user2/ftp/flag.txt \
    && chown -R user2:user2 /home/user2/ftp \
    && chmod -R 755 /home/user2/ftp

# Sao chép tệp cấu hình vsftpd
COPY vsftpd.conf /etc/vsftpd.conf

USER user1
# Mở cổng 21 cho FTP
EXPOSE 21

# Khởi động vsftpd khi container chạy
CMD ["/usr/sbin/vsftpd", "/etc/vsftpd.conf"]
