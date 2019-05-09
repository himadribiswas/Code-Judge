#include<stdio.h>
#include<string.h>
main(){
	
	char x[20],s1[20];
	gets(x);
	int len=strlen(x);
	for(int i=0;i<len;i++){
	 s1[i]=x[i]+1;
	}
	
	 puts(s1);
}