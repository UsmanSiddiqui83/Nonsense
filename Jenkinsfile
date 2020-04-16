pipeline{
	agent any

	stages{
		stage ("build"){
			steps {
				echo 'hello world again'
			}
		
	        	post{
	          	  success{
		    		archiveArtifacts 'index.html'
	          	}
	        	}
		}
		stage ("deploy"){
			steps {
		sh label: '', script: 'docker cp ./index.html lmno234lol:/app/index.php'
}
}
}
}
