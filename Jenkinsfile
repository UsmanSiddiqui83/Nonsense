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
		sh label: '', script: '''ID=`docker ps | awk \'NS>1{print $1}\'`
		docker cp ./index.html $ID:/app/index.php'''
		        }
		}
	}
}
