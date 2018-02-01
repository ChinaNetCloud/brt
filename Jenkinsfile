pipeline {
    agent { docker 'php' }
    stages {
        stage('build') {
            steps {
                sh 'php --version'
		sh '''
		    apt-get update -y
		    apt-get install git unzip -y
		    ./composer.phar update
		'''
            }
        }
    }
}

