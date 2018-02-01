pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
		sh '''
		    sed 's|deb.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list -i
		    sed 's|security.debian.org|mirrors.aliyun.com/debian-security|g' /etc/apt/sources.list -i
		    apt-get update -y
		    apt-get install git unzip -y
		    ./composer.phar update
		'''
            }
/*
	stage('Test') {
	    steps {
		sh ''
	    } */
        }
    }
}

