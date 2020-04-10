pipeline{
	agent any

	stages{
		stage ("build"){
			steps {
				echo 'hello world again'
			}
		}
	}
	post{
	  success{
		archiveArtifacts 'index.html'
	  }
	}
}
