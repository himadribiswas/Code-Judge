#include<stdio.h>
int main(){
	int size,x[9][9];
	scanf("%d",&size);
	if(size>2 && size<10)
	{
	
	for(int i=0;i<size;i++){
		for(int j=0;j<size;j++){
			scanf("%d",&x[i][j]);
		}
	}
	
	
	int sum=0;
	for(int i=0;i<size;i++){
		for(int j=0;j<size;j++){
			if(i==j){
				sum+=x[i][j];       //left array
			}
		}
	}
	int sumr=0;
	for(int i=0;i<size;i++){
	//	for(int j=size-1-i;j<=0;j--){
	int j=size-1-i;
			sumr+=x[i][j];
		}
	
if(sum>sumr)
printf("%d",sum);
else
printf("%d",sumr);
}

else
printf("SIZE OUT OF RANGE");
	return 0;
}