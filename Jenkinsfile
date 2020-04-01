pipeline {
  agent any
  stages {
    stage('echo') {
      steps {
        echo 'This is the message'
      }
    }

    stage('artifact') {
      steps {
        sh '''ps -ax | grep [j]enkins >> process.txt
'''
      }
    }

    stage('archival') {
      steps {
        archiveArtifacts(artifacts: '*.txt', fingerprint: true, onlyIfSuccessful: true)
      }
    }

    stage('done') {
      steps {
        echo 'job complete'
      }
    }

  }
}