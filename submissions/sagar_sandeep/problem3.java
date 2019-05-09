import java.util.*;
class problem3
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        int m=sc.nextInt(),sr=0,sl=0,i,j;
        if(m>2&&m<10)
        {
            int A[][]=new int[m][m];
        for(i=0;i<m;i++)
        {
            for(j=0;j<m;j++)
            {
                A[i][j]=sc.nextInt();
            }
        }
        for(i=0;i<m;i++)
        {
            for(j=0;j<m;j++)
            {
                if(i==j)
                sl+=A[i][j];
                else if((i+j)==(m-1))
                sr+=A[i][j];
            }
        }
        if(sl>=sr)
        System.out.println(sl);
        else
        System.out.println(sr);
    }
    else
    System.out.println("SIZE OUT OF RANGE");
}
}
        
        