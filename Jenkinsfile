pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
		sh '''
		    sudo sed 's|deb.debian.org|mirrors.aliyun.com|g' /etc/apt/sources.list -i
		    sudo sed 's|security.debian.org|mirrors.aliyun.com/debian-security|g' /etc/apt/sources.list -i
		    sudo apt-get update -y
		    sudo apt-get install git unzip -y
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

