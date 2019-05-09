#include<stdio.h>
#include<stdlib.h>
main()
{
	int M,i,j,k,leftsum=0,rightsum=0;
	scanf("%d",&M);
	if(M<=2||M>=10)
	{
		printf("SIZE OUT OF RANGE");
		exit(0);
	}
	int A[M][M];
	for(i=0;i<M;i++)
	{
		for(j=0;j<M;j++)
		scanf("%d",&A[i][j]);
	}
	for(i=0;i<M;i++)
	leftsum=leftsum+A[i][i];
	k=M-1;
	for(i=0;i<M;i++)
	{
		rightsum=rightsum+A[i][k];
		k=k-1;
	}
	if(leftsum>rightsum)
	printf("%d",leftsum);
	else if(rightsum>=leftsum)
	printf("%d",rightsum);
}
