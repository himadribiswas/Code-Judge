#include<stdio.h>
#include<string.h>
int main()
{
	int i;
	char str[100];
	gets(str);
	for(i=0;str[i]!='\0';i++)
	{
		if (str[i]>=65 && str[i]<=91)
		str[i]=str[i+1];
	}
	//printf("%s",str);
	puts(str);
	return 0;
}