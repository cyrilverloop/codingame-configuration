#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    int start_r;
    int start_c;
    cin >> start_r >> start_c; cin.ignore();
    int goal_r;
    int goal_c;
    cin >> goal_r >> goal_c; cin.ignore();
    for (int i = 0; i < n; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}