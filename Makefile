github:
	git init
	git add .
	git commit -m "initial"
	git branch -M main
	git remote add origin $(url)
	git push -u origin main
