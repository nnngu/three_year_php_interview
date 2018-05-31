## Redis 的主从是怎样同步数据的？（即复制功能）

无论是初次连接还是重新连接，当建立一个从服务器时，从服务器都将给主服务器发送一个 SYNC 命令。接到 SYNC 命令的主服务器将开始执行 BGSAVE，并在保存操作执行期间，将所有新执行的命令都保存到一个缓冲区里面，当 BGSAVE 执行完毕后，主服务器将执行保存操作所得到的 .rdb 文件发送给从服务器，从服务器接收这个 .rdb 文件，并将文件中的数据载入到内存中。之后主服务器会以 Redis 命令协议的格式，将写命令缓冲区中积累的所有内容都发送给从服务器。