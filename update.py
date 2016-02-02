# Copyright 2016 Remington Thurber

import ftplib

def main():
    ftp = ftplib.FTP('ftp.ellendaleag.org', 'ellendaleag', 'newlife007*')

    ftp.cwd('ellendaleag.org')
    #print ftp.dir()
    #ftp.delete('favicon.ico')
    #ftp.delete('favicon.gif')
    ftp.delete('index.html')
    ftp.storlines('STOR ' + 'index.html', open('index.html', 'r'))
    ftp.cwd('js')
    ftp.delete('main.js')
    ftp.storlines('STOR ' + 'main.js', open('js/main.js', 'r'))
    ftp.cwd('../css')
    ftp.delete('main.css')
    ftp.storlines('STOR ' + 'main.css', open('css/main.css', 'r'))
    
    ftp.close()
    print('Update successful')
    
if __name__ == '__main__':
    main()