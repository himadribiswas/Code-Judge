#include <stdio.h>

int main(void) {
        long long int n;
        scanf("%lld",&n);
        if((n%7)==0 || n%10 ==7)
        printf("BUZZ\n");
        else
        printf("NOT BUZZ\n");
    
    	return 0;
}

