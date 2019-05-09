#include <stdio.h>
#include <string.h>

int main(void) {
	char a[100],i;
	scanf("%s",a);
	for(i=0;i<strlen(a);i++)
	if((int)a[i]==90)
	a[i]='A';
	else if((int)a[i]==122)
	a[i]='a';
	else
	a[i]=(char)((int)a[i]+1);
	for(i=0;i<strlen(a);i++)
	printf("%c",a[i]);
	return 0;
}

