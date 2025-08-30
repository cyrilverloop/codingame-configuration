#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    int q;
    cin >> n >> q; cin.ignore();
    for (int i = 0; i < n; i++) {
        string letter;
        cin >> letter; cin.ignore();
    }
    for (int i = 0; i < q; i++) {
        string word;
        int score;
        cin >> word >> score; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "choice score1-score2" << endl;
}