node('docker') {
 
    stage 'Checkout'
        checkout scm
    stage 'Build & UnitTest'
        sh "docker build -t webapp:B${BUILD_NUMBER} -f Dockerfile ."
    stage 'Send to Registry'
	sh "docker tag webapp:B${BUILD_NUMBER} registry:5000/apps/webapp:B${BUILD_NUMBER}"
	sh "docker push localhost:5000/apps/webapp:B${BUILD_NUMBER}"
    stage 'Integration Test'
        sh "docker-compose -f docker-compose.yml up --force-recreate --abort-on-container-exit"
        sh "docker-compose -f docker-compose.yml down -v"
}
