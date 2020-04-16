pipeline{
	agent any

	stages{
		stage ("build"){
			steps {
				echo 'hello world again'
			}
		
	        	post{
	          	  success{
		    		archiveArtifacts 'index.php'
	          	}
	        	}
		}
		stage ("deploy"){
			steps {
		sh label: '', script: 'docker cp ./index.php 34d0a086c1fb:/app/index.php'
}
}
}
}
