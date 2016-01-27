```
    1  ls 
    2  la -a
    3  less /etc/systemd/system.conf
    4  less /etc/systemd/system/isucon.php.service
    5  less /etc/systemd/user.conf
    6  systemctl
    7  systemctl | grep ruby
    8  systemctl | grep php
    9  systemctl stop ruby
   10  sudo systemctl stop ruby
   11  sudo systemctl stop isucon.ruby
   12  sudo systemctl disable isucon.ruby
   13  sudo systemctl enable isucon.php
   14  sudo systemctl start isucon.php
   15  less webapp/php/nginx.php.conf
   16  less /etc/nginx/nginx.conf
   17  cp -p  /etc/nginx/nginx.conf /etc/nginx/nginx.conf.bak
   18  mv  /etc/nginx/nginx.conf /etc/nginx/nginx.conf.bak
   19  sudo mv  /etc/nginx/nginx.conf /etc/nginx/nginx.conf.bak
   20  sudo mv  webapp/php/nginx.php.conf /etc/nginx/nginx.conf
   21  nginx
   22  nginx --help
   23  nginx -help
   24  sudo nginx -s reload
   25  which git
   26  ls
   27  mkdir etc
   28  git init
   29  git status
   30  git add env.sh
   31  git add webapp/php/
   32  git add webapp/
   33  git status
   34  git commit
   35  git config --global user.email "bomsap700@gmail.com"
   36  git config --global user.name "do7be"
   37  git commit
   38  sudo mv /etc/nginx/nginx.conf ~/etc
   39  ln -s /home/isucon/etc/nginx.conf /etc/nginx/nginx.conf
   40  sudo ln -s /home/isucon/etc/nginx.conf /etc/nginx/nginx.conf
   41  sudo nginx -s reload
   42  git status
   43  git add etc/
   44  git commit
   45  vi .gitignore
   46  git status
   47  git add .gitignore
   48  git commit
   49  ls
   50  cd webapp
   51  ls
   52  cd webapp
   53  ls
   54  ps auxww
   55  which redis
   56  mysql --help | grep my.cnf
   57  ls /usr/etc/my.cnf
   58  ls /etc/my.cnf
   59  sudo mv /etc/my.cnf ~/etc
   60  sudo ln -s /home/isucon/etc/my.cnf /etc/my.cnf
   61  git status
   62  git add ../etc/
   63  git commit
   64  ls
   65  cd ../
   66  ls
   67  less env.sh
   68  ls
   69  cd webapp
   70  ls
   71  ls */*
   72  ls
   73  less php/index.php
   74  less tools/init.sh
   75  less sql/init.sql
   76  less tools/init.sh
   77  /bin/mysql -uisucon isucon
   78  less sql/init.sql
   79  less sql/schema.sql
   80  less sql/init.sql
   81  vi sql/init.sql
   82  vi php/index.php
   83  git add sql/
   84  git status
   85  git commit
   86  sudo reboot
   87  cd webapp
   88  ls
   89  cd tools
   90  ls
   91  less tweet_list
   92  cd ../
   93  vi php/templates/error.php
   94  vi php/index.php
   95  vi sql/schema.sql
   96  /bin/mysql -uisucon isucon
   97  vi sql/schema.sql
   98  vi webapp/php/index.php
   99  less webapp/php/templates/followers.php
  100  less webapp/php/templates/following.php
  101  vi webapp/php/index.php
  102  git status
  103  git add webapp/php/index.php
  104  git commit
  105  sudo reboot
  106  ls
  107  vi webapp/php/index.php
  108  git status
  109  git add webapp/sql/schema.sql
  110  git commit
  111  git add webapp/php/index.php
  112  git commit
  113  vi webapp/php/index.php
  114  less webapp/php/templates/index.php
  115  vi webapp/php/templates/index.php
  116  vi webapp/php/index.php
  117  vi webapp/php/templates/index.php
  118  git status
  119  git add webapp/
  120  git diff --cached
  121  git commit
  122  vi webapp/php/templates/index.php
  123  git diff
  124  git status
  125  git stash
  126  git stash pop
  127  git diff
  128  less webapp/php/templates/layout.php
  129  less webapp/php/templates/user.php
  130  git stash
  131  less webapp/php/templates/user.php
  132  vi webapp/php/templates/user.php
  133  git status
  134  git diff
  135  git reset --hard HEAD
  136  vi webapp/php/templates/user.php
  137  vi webapp/php/index.php
  138  git diff
  139  less webapp/php/templates/tweet.php
  140  git status
  141  vi webapp/php/templates/user.php
  142  git add webapp/
  143  git diff --cached
  144  git commit
  145  vi webapp/php/templates/followers.php
  146  vi webapp/php/templates/following.php
  147  vi webapp/php/templates/login.php
  148  vi webapp/php/templates/index.php
  149  vi webapp/php/templates/following.php
  150  vi webapp/php/templates/index.php
  151  git stash
  152  git status
  153  vi webapp/php/templates/index.php
  154  vi webapp/php/templates/user.php
  155  vi webapp/php/templates/tweet.php
  156  vi webapp/php/index.php
  157  vi webapp/sql/test_initialize.sql
  158  vi webapp/sql/schema.sql
  159  vi webapp/php/templates/index.php
  160  php -v
  161  git status
  162  git add webapp/
  163  git diff --cached
  164  git commit
  165  vi webapp/php/templates/tweet.php
  166  vi webapp/php/templates/user.php
  167  git status
  168  sudo reboot
  169  vi etc/my.cnf
  170  sudo vi etc/my.cnf
  171  sudo service mysqld restart
  172  sudo vi etc/nginx.conf
  173  cat /etc/sysctl.conf
  174  vi /etc/sysctl.conf
  175  sudo mv /etc/sysctl.conf etc
  176  sudo ln -s /home/isucon/etc/sysctl.conf /etc/sysctl.conf
  177  git status
  178  git add etc/sysctl.conf
  179  git commit
  180  git status
  181  sudo vi etc/sysctl.conf
  182  sudo /sbin/sysctl -p
  183  sudo nginx -s reload
  184  sudo reboot
  185  php -i | grep -i redis
  186  vi webapp/php/index.php
  187  wget http://mirror.centos.org/centos/6/SCL/x86_64/scl-utils/scl-utils-20120927-11.el6.centos.alt.x86_64.rpm
  188  which rpm
  189  sudo rpm -ivh scl-utils-20120927-11.el6.centos.alt.x86_64.rpm
  190  sudo yum install php56-pecl-igbinary
  191  wget http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
  192  git status
  193  git add etc/
  194  git commit
  195  sudo rpm -ivh remi-release-6.rpm
  196  sudo yum --enablerepo=remi,remi-php56 install php56-php-pecl-redis.x86_64
  197  ls /opt/remi/php56/root/usr/lib64/php/modules/redis.so
  198  sudo ln -s /opt/remi/php56/root/usr/lib64/php/modules/redis.so /usr/lib64/php/modules/redis.so 
  199  sudo mkdir -p /usr/lib64/php/modules/
  200  sudo ln -s /opt/remi/php56/root/usr/lib64/php/modules/redis.so /usr/lib64/php/modules/redis.so 
  201  php -i | grep -i redis
  202  vi .local/php/etc/php.ini
  203  sudo mv .local/php/etc/php.ini etc/php.ini
  204  sudo ln -s etc/php.ini .local/php/etc/php.ini
  205  sudo vi etc/php.ini
  206  git add etc/php.ini
  207  git commit
  208  sudo vi etc/php.ini
  209  php -i | grep -i redis
  210  sudo service redis start
  211  less /etc/systemd/system/isucon.php.service
  212  which redis
  213  which redis-cli
  214  sudo chkconfig redis on
  215  php -i | grep php.ini
  216  service httpd restart
  217  /etc/init.d/httpd restart
  218  sudo reboot
  219  php -i | grep php.ini
  220  php -i | grep redis
  221  history
  222  ls webapp/tools
  223  less webapp/tools/user_list
  224  git status
  225  sudo yum --enablerepo=epel -y install redis
  226  php -i | grep redis
  227  git diff
  228  git reset --hard HEAD
  229  which redis
  230  sudo nginx -s reload
  231  history
  232  $redis = new Redis();
  233  vi webapp/php/index.php
  234  systemctl enable redis
  235  sudo systemctl enable redis
  236  sudo systemctl start redis
  237  redis
  238  exit
  239  which redis
  240  ls
  241  la
  242  redis --help
  243  ls redis
  244  redis
  245  pwd
  246  cd ~/
  247  redis-cli
  248  sudo vi etc/php.ini
  249  sudo nginx -s reload
  250  php -i | grep redis
  251  php -m | grep redis
  252  php -i | grep redis
  253  ps auxww | grep apache
  254  ps auxww | grep httpd
  255  ps auxww | grep http
  256  ps auxww | grep nginx
  257  history
  258  sudo mkdir  /usr/lib64/php/5.6
  259  sudo cp -pR  /usr/lib64/php/modules /usr/lib64/php/5.6/
  260  sudo vi /etc/php-5.6.d/50-redis.ini
  261  sudo mkdir /etc/php-5.6.d/
  262  sudo vi /etc/php-5.6.d/50-redis.ini
  263  git status
  264  git diff
  265  git checkout etc/php.ini
  266  sudo service php-fpm restart
  267  which php-fpm
  268  sudo nginx -s reload
  269  curl -s http://localhost/phpinfo.php |grep redis
  270  php -i | grep redis
  271  php -m | grep redis
  272  vi webapp/php/phpinfo.php
  273  curl -s http://localhost/phpinfo.php |grep redis
  274  curl -s http://localhost/phpinfo.php
  275  git stash
  276  curl -s http://localhost/phpinfo.php
  277  ls webapp
  278  ls webapp/php
  279  curl -s http://localhost/
  280  curl -s http://localhost/index.php
  281  curl -s http://localhost/phpinfo.php
  282  vi etc/nginx.conf
  283  yum list
  284  yum list | grep fpm
  285  git log --stat
  286  sudo rpm -ivh scl-utils-20120927-11.el6.centos.alt.x86_64.rpm
  287  sudo yum install php56-pecl-igbinary
  288  yum install -y php-pecl-redis
  289  sudo yum install -y php-pecl-redis
  290  systemctl restart redis
  291  sudo systemctl restart redis
  292  php -m | grep redis
  293  sudo yum install php-pecl-igbinary
  294  rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
  295  sudo rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
  296  sudo rpm --import http://rpms.famillecollet.com/RPM-GPG-KEY-remi
  297  sudo rpm -ivh http://dl.fedoraproject.org/pub/epel/7/x86_64/e/epel-release-7-5.noarch.rpm
  298  udo rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
  299  sudo rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7
  300  sudo yum install php56-pecl-igbinary
  301  wget http://mirror.centos.org/centos/6/SCL/x86_64/scl-utils/scl-utils-20120927-11.el6.centos.alt.x86_64.rpm
  302  ls
  303  sudo rpm -ivh scl-utils-20120927-11.el6.centos.alt.x86_64.rpm
  304  sudo yum install php56-pecl-igbinary
  305  php -m | grep redis
  306  sudo reboot
  307  php -m | grep redis
  308  history
  309  history | grep yum
  310  git status
  311  git reset HEAD^
  312  git status
  313  git reset HEAD^
  314  git log
  315  git diff
  316  git stash
  317  git stats
  318  git status
  319  sudo reboot
  320  git stash pop
  321  git diff
  322  sudo nginx -s reload
  323  history
  324  history | sys
  325  history | grep sys
  326  sudo /sbin/sysctl -p
  327  sudo reboot
  328  git diff
  329  git status
  330  less etc/php.ini
  331  git add etc/
  332  git commit
  333  vi etc/nginx.conf
  334  sudo nginx -s reload
  335  vi etc/nginx.conf
  336  grep www.conf /etc/*
  337  find / -name php-fpm*
  338  find / -name "php-fpm*"
  339  less .local/php/etc/php-fpm.conf.default
  340  less webapp/php/php-fpm.conf
  341  vi webapp/php/php-fpm.conf
  342  git status
  343  git diff
  344  vi etc/nginx.conf
  345  sudo nginx -s reload
  346  vi webapp/php/php-fpm.conf
  347  vi etc/nginx.conf
  348  ls /var/run/php-fpm/php-fpm.sock
  349  ls /var/run/php-fpm/
  350  ls /var/run/
  351  mkdir /var/run/php-fpm
  352  sudo mkdir /var/run/php-fpm
  353  sudo chmod 777 /var/run/php-fpm
  354  sudo nginx -s reload
  355  vi etc/nginx.conf
  356  sudo nginx -s reload
  357  vi etc/nginx.conf
  358  sudo nginx -s reload
  359  sudo service php-fpm restart
  360  sudo reboot
  361  vi etc/nginx.conf
  362  touch /var/run/php-fpm/php-fpm.sock
  363  history
  364  touch /var/run/php-fpm/
  365  touch /var/run
  366  vi webapp/php/php-fpm.conf
  367  vi etc/nginx.conf
  368  sudo nginx -s reload
  369  sudo reboot
  370  git status
  371  git add etc/nginx.conf
  372  git add webapp/php/php-fpm.conf
  373  git diff --cached
  374  git commit
  375  vi etc/nginx.conf
  376  sudo nginx -s reload
  377  git diff
  378  vi etc/nginx.conf
  379  sudo nginx -s reload
  380  sudo mv /usr/lib64/php/modules /usr/lib64/php/modules_not
  381  php -m
  382  ls /usr/lib64/php/modules_not
  383  sudo reboot
  384  php -m
  385  ls /usr/lib64/php/5.6/
  386  ls /usr/lib64/php/5.6/modules
  387  ls /usr/lib64/php/modules_not/
  388  php -m
  389  git diff
  390  vi etc/nginx.conf
  391  sudo nginx -s reload
  392  vi etc/nginx.conf
  393  git diff
  394  cat /proc/cpuinfo | grep processor
  395  vi etc/nginx.conf
  396  sudo nginx -s reload
  397  sudo reboot
```
